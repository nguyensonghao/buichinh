<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Config;

class GiamDocMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (Auth::check()) {
            // Check is giamdoc
            $user = Auth::user();
            if ($user['option_id'] != Config::get('constants.options.giamdoc')) {
                return redirect('dang-nhap')->with('error', 'Bạn phải đăng nhập với quyền giám đốc để sử dụng hệ thống');
            } else {
                return $next($request);
            }
        } else {
            return redirect('dang-nhap')->with('error', 'Đăng nhập để sử dụng hệ thống');
        }
    }
}
