<script setup lang="ts">
    import { Link } from '@inertiajs/vue3';
    import { route } from 'ziggy-js';
</script>
<template>
    <header
        class="flex items-center justify-between px-6 py-4 bg-background border-b border-border shadow-sm sticky top-0 z-50">
        <!-- Logo & Title -->
        <section class="flex items-center gap-3">
            <div
                class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-background font-bold text-lg">
                PB
            </div>
            <span class="text-lg font-light text-foreground tracking-tight">Akmal Keisin A.</span>
        </section>

        <!-- Main Navigation -->
        <nav class="flex gap-2">
            <Link :href="route('home')"
                class="px-3 py-2 rounded-md text-sm font-medium transition-colors hover:bg-muted hover:text-foreground/90 data-[active=true]:bg-primary data-[active=true]:text-primary-foreground"
                :data-active="$page.component === 'home'">Home</Link>
            <Link :href="route('about')"
                class="px-3 py-2 rounded-md text-sm font-medium transition-colors hover:bg-muted hover:text-foreground/90 data-[active=true]:bg-primary data-[active=true]:text-primary-foreground"
                :data-active="$page.component === 'about'">About</Link>
            <Link :href="route('projects')"
                class="px-3 py-2 rounded-md text-sm font-medium transition-colors hover:bg-muted hover:text-foreground/90 data-[active=true]:bg-primary data-[active=true]:text-primary-foreground"
                :data-active="$page.component === 'projects'">Projects</Link>
            <Link :href="route('blogs')"
                class="px-3 py-2 rounded-md text-sm font-medium transition-colors hover:bg-muted hover:text-foreground/90 data-[active=true]:bg-primary data-[active=true]:text-primary-foreground"
                :data-active="$page.component === 'blogs'">Blogs</Link>
            <Link :href="route('contact')"
                class="px-3 py-2 rounded-md text-sm font-medium transition-colors hover:bg-muted hover:text-foreground/90 data-[active=true]:bg-primary data-[active=true]:text-primary-foreground"
                :data-active="$page.component === 'contact'">Contact</Link>
        </nav>

        <!-- Auth Navigation -->
        <nav class="flex gap-2">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                class="px-3 py-2 rounded-md text-sm font-medium transition-colors bg-muted text-foreground hover:bg-primary hover:text-primary-foreground">
            Dashboard</Link>
            <template v-else>
                <Link :href="route('login')"
                    class="px-3 py-2 rounded-md text-sm font-medium transition-colors bg-primary text-primary-foreground hover:bg-primary/90">
                Login</Link>
                <Link :href="route('register')"
                    class="px-3 py-2 rounded-md text-sm font-medium transition-colors bg-muted text-foreground hover:bg-primary hover:text-primary-foreground">
                Register</Link>
            </template>
        </nav>
    </header>
</template>
