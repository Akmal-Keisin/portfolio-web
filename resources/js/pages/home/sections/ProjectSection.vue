<script setup lang="ts">
    import Button from '@/components/ui/button/Button.vue';
</script>
<template>
    <section class="bg-background border-b border-border shadow-sm px-4 py-16">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <h2 class="text-3xl font-semibold text-foreground text-center mb-6">Projects</h2>
            <p class="text-lg text-muted-foreground text-center mb-4">
                These are some of the projects I have completed so far. The number of projects is not pretty large
                yet, but it will keep grow up as I keep learning and exploring more about software development.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-card border border-border rounded-xl shadow-sm flex flex-col overflow-hidden">
                    <img src="https://via.placeholder.com/600x300?text=Project+1" alt="Project 1"
                        class="w-full h-48 object-cover" />
                    <div class="flex flex-col flex-1 p-6 gap-4">
                        <h3 class="text-xl font-semibold text-foreground">Project One</h3>
                        <p class="text-muted-foreground flex-1">
                            A brief description of Project One. This project demonstrates my skills in backend and
                            frontend development.
                        </p>
                        <Button variant="default" class="self-start mt-2">Read More</Button>
                    </div>
                </div>
                <div class="bg-card border border-border rounded-xl shadow-sm flex flex-col overflow-hidden">
                    <img src="https://via.placeholder.com/600x300?text=Project+2" alt="Project 2"
                        class="w-full h-48 object-cover" />
                    <div class="flex flex-col flex-1 p-6 gap-4">
                        <h3 class="text-xl font-semibold text-foreground">Project Two</h3>
                        <p class="text-muted-foreground flex-1">
                            A brief description of Project Two. Built with modern technologies and a focus on clean
                            code.
                        </p>
                        <Button variant="default" class="self-start mt-2">Read More</Button>
                    </div>
                </div>
                <div class="bg-card border border-border rounded-xl shadow-sm flex flex-col overflow-hidden">
                    <img src="https://via.placeholder.com/600x300?text=Project+3" alt="Project 3"
                        class="w-full h-48 object-cover" />
                    <div class="flex flex-col flex-1 p-6 gap-4">
                        <h3 class="text-xl font-semibold text-foreground">Project Three</h3>
                        <p class="text-muted-foreground flex-1">
                            A brief description of Project Three. Focused on performance and user experience.
                        </p>
                        <Button variant="default" class="self-start mt-2">Read More</Button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
