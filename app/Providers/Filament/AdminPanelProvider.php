<?php

declare(strict_types=1);

namespace App\Providers\Filament;

use App\Filament\Pages\Auth\EditProfile;
use App\Filament\Widgets\AccountWidget;
use App\Http\Middleware\SetLocale;
use App\Models\User;
use Filament\Enums\ThemeMode;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationItem;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Icons\Heroicon;
use Filament\View\PanelsRenderHook;
use GeoSot\FilamentEnvEditor\FilamentEnvEditorPlugin;
use Illuminate\Contracts\View\View;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Openplain\FilamentShadcnTheme\Color as ShadcnColor;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->profile(EditProfile::class, isSimple: false)
            ->navigationItems([
                NavigationItem::make('Profil')
                    ->icon(Heroicon::OutlinedUser)
                    ->url(fn (): string => EditProfile::getUrl())
                    ->isActiveWhen(fn (): bool => request()->routeIs('filament.admin.auth.profile'))
                    ->sort(200),
            ])
            ->defaultThemeMode(ThemeMode::Dark)
            ->colors([
                'primary' => ShadcnColor::Default,
                'gray' => ShadcnColor::Default,
            ])
            ->font('Inter')
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
            ])
            ->renderHook(
                PanelsRenderHook::HEAD_END,
                fn (): View|string => $this->themeScript(),
            )
            ->renderHook(
                PanelsRenderHook::HEAD_END,
                fn (): string => '<style>.fi-ta-content-grid .fi-ta-record { overflow: hidden; } .fi-ta-content-grid .fi-ta-record img { width: 100%; object-fit: cover; display: block; }</style>',
            )
            ->plugins([
                FilamentEnvEditorPlugin::make()
                    ->navigationGroup('Rendszer')
                    ->navigationLabel('Környezeti változók (.env)')
                    ->navigationIcon('heroicon-o-cog-8-tooth')
                    ->navigationSort(100)
                    ->slug('env-editor')
                    ->hideKeys(
                        'APP_DEBUG',
                        'APP_ENV',
                        'APP_FAKER_LOCALE',
                        'APP_FALLBACK_LOCALE',
                        'APP_KEY',
                        'APP_LOCALE',
                        'APP_MAINTENANCE_DRIVER',
                        'APP_NAME',
                        'APP_PORT',
                        'APP_SERVICE',
                        'APP_URL',
                        'BCRYPT_ROUNDS',
                        'BROADCAST_CONNECTION',
                        'CACHE_STORE',
                        'DB_CONNECTION',
                        'DB_DATABASE',
                        'DB_HOST',
                        'DB_PASSWORD',
                        'DB_PORT',
                        'DB_USERNAME',
                        'FILESYSTEM_DISK',
                        'LOG_CHANNEL',
                        'LOG_DEPRECATIONS_CHANNEL',
                        'LOG_LEVEL',
                        'LOG_STACK',
                        'MAIL_PASSWORD',
                        'PHP_CLI_SERVER_WORKERS',
                        'QUEUE_CONNECTION',
                        'SESSION_DOMAIN',
                        'SESSION_DRIVER',
                        'SESSION_ENCRYPT',
                        'SESSION_LIFETIME',
                        'SESSION_PATH',
                        'VITE_APP_NAME',
                    ),
            ])
            ->middleware([
                SetLocale::class,
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }

    private function themeScript(): View|string
    {
        if (! Auth::check()) {
            return '';
        }

        /** @var User $user */
        $user = Auth::user();

        return view('filament.theme-sync', [
            'themeMode' => $user->theme_mode ?? 'dark',
        ]);
    }
}
