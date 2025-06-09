<script setup lang="ts">
    import Button from '@/components/ui/button/Button.vue';
</script>
<template>
    <section class="bg-background border-b border-border shadow-sm px-4 py-16 flex justify-around items-center gap-6">
        <div
            class="w-[700px] h-[400px] bg-primary rounded-xl flex items-center justify-center text-background font-bold text-lg">
            Image Sample
        </div>
        <div class="w-full max-w-2xl flex flex-col gap-4">
            <h2 class="text-3xl font-semibold text-foreground mb-6">About Me</h2>
            <p class="text-lg text-muted-foreground mb-4">
                Just an ordinary graduated vocational high school student who loves to learn and explore software
                development world.
            </p>
            <p class="text-lg text-muted-foreground mb-4">
                I'm currently focusing on backend development, but I'm also interested in frontend development and
                software development in general. I love to learn new things and solve problems. I'm always looking
                for opportunities to improve my skills and knowledge at software development world.
            </p>
            <div>
                <Button variant="default" class="cursor-pointer">
                    Read More
                </Button>
            </div>
        </div>
    </section>
</template>
