<?php

namespace App\Providers;

use App\Post;
use App\Policies\PostPolicy;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider{
    /**
     * 应用的策略映射
     *
     * @var array
     */
    protected $policies = [
        Post::class => PostPolicy::class,
    ];

    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
    }

}