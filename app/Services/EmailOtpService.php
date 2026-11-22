<?php

namespace App\Services;

use App\Models\User;
use App\Notifications\EmailOtpNotification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmailOtpService
{
    public const LOGIN = 'login';

    public function issue(User $user, string $purpose): void
    {
        $code = (string) random_int(100000, 999999);
        $now = now();

        DB::table('email_otps')->updateOrInsert(
            [
                'user_id' => $user->getKey(),
                'purpose' => $purpose,
            ],
            [
                'code_hash' => Hash::make($code),
                'expires_at' => $now->copy()->addMinutes(10),
                'attempts' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        );

        $user->notify(new EmailOtpNotification($code, $purpose));
    }

    public function verify(User $user, string $purpose, string $code): bool
    {
        return DB::transaction(function () use ($user, $purpose, $code): bool {
            $otp = DB::table('email_otps')
                ->where('user_id', $user->getKey())
                ->where('purpose', $purpose)
                ->lockForUpdate()
                ->first();

            if (
                ! $otp
                || ! Carbon::parse($otp->expires_at)->isFuture()
                || $otp->attempts >= 5
            ) {
                return false;
            }

            if (! Hash::check($code, $otp->code_hash)) {
                DB::table('email_otps')
                    ->where('user_id', $user->getKey())
                    ->where('purpose', $purpose)
                    ->increment('attempts');

                return false;
            }

            DB::table('email_otps')
                ->where('user_id', $user->getKey())
                ->where('purpose', $purpose)
                ->delete();

            return true;
        });
    }
}
