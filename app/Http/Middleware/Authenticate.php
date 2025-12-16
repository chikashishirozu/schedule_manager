protected function redirectTo(Request $request): ?string
{
    return $request->expectsJson() ? null : route('login');
}
