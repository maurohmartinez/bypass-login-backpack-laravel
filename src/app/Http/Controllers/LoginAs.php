<?php

namespace MHMartinez\LoginAs\app\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class LoginAs extends Controller
{
    public function loginAs(): View
    {
        return view('login_as::form', [
            'roles' => config('backpack.permissionmanager.models.role')::all()->pluck('name', 'id')->toArray(),
        ]);
    }

    public function loginAsPost(Request $request): RedirectResponse
    {
        if (App::isProduction()) {
            abort(404);
        }

        if (!$request->has('role_id')) {
            return Redirect::back()->withErrors(['role_id' => 'A role is required.']);
        }

        $user = User::query()->whereHas('roles', function (Builder $query) use ($request) {
            $query->where('roles.id', $request->get('role_id'));
        })?->first();

        if (!$user) {
            return Redirect::back()->withErrors(['role_id' => 'No user found with this role.']);
        }

        Auth::guard(config('backpack.base.guard'))->logout();
        Auth::guard(config('backpack.base.guard'))->login($user);

        return Redirect::to(config('login_as.login_path', 'admin/login'));
    }
}
