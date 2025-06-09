<script setup lang="ts">
    import Button from '@/components/ui/button/Button.vue';
</script>
<template>
    <!-- Jumbotron -->
    <section
        class="flex justify-around items-center gap-6 bg-background border-b border-border shadow-sm min-h-[calc(100vh-72px)] flex-col md:flex-row">
        <div class="w-full max-w-2xl flex flex-col gap-4">
            <h1 class="text-xl font-semibold text-foreground">Hi, my name is</h1>
            <h1 class="text-6xl md:text-7xl font-thin text-foreground leading-tight">
                <span class="font-bold">Kei</span>, I always trying to be a <span class="text-primary">"Key"</span>
                of
                any <span class="font-bold">problem</span>
            </h1>
            <p class="text-lg text-muted-foreground">
                I'm a backend developer with a passion to learn and grow with software development. <b>I'm eager to
                    solve problems and learn new things</b>.
            </p>
            <div class="flex gap-4">
                <Button variant="default" class="cursor-pointer">
                    Get Started
                </Button>
                <Button variant="secondary" class="cursor-pointer">
                    About Me
                </Button>
            </div>
        </div>
        <div
            class="w-[700px] h-[400px] bg-primary rounded-xl flex items-center justify-center text-background font-bold text-lg">
            Image Sample
        </div>
    </section>
</template>
