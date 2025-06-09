<script setup lang="ts">
    import MainLayout from '@/layouts/MainLayout.vue';
</script>
<template>
    <MainLayout>
        <section
            class="flex justify-around items-center gap-6 bg-background border-b border-border shadow-sm min-h-[calc(100vh-72px)] flex-col md:flex-row">
            <div class="w-full max-w-2xl flex flex-col gap-4">
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
        <section
            class="bg-background border-b border-border shadow-sm px-4 py-16 flex justify-around items-center gap-6">
            <div
                class="w-[700px] h-[400px] bg-primary rounded-xl flex items-center justify-center text-background font-bold text-lg">
                Image Sample
            </div>
            <div class="w-full max-w-2xl flex flex-col gap-4">
                <h2 class="text-3xl font-semibold text-foreground mb-6">My Journey</h2>
                <p class="text-lg text-muted-foreground mb-4">
                    Just an ordinary graduated vocational high school student who loves to learn and explore software
                    development world.
                </p>
                <p class="text-lg text-muted-foreground mb-4">
                    I'm currently focusing on backend development, but I'm also interested in frontend development and
                    software development in general. I love to learn new things and solve problems. I'm always looking
                    for opportunities to improve my skills and knowledge at software development world.
                </p>
            </div>
        </section>
    </MainLayout>
</template>
