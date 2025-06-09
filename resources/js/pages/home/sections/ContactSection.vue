<script setup lang="ts">
    import Button from '@/components/ui/button/Button.vue';
    import Input from '@/components/ui/input/Input.vue';
    import Textarea from '@/components/ui/textarea/Textarea.vue';
</script>
<template>
    <section class="bg-background border-b border-border shadow-sm px-4 py-16">
        <div class="max-w-xl mx-auto">
            <h2 class="text-3xl font-semibold text-foreground mb-6 text-center">Contact Me</h2>
            <p class="text-lg text-muted-foreground text-center mb-4">
                Looking for collaboration, have a question, or just want to say hi? Feel free to reach out!
            </p>
            <div class="bg-card border border-border rounded-xl shadow-sm p-8">
                <form class="flex flex-col gap-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-foreground mb-1">Name</label>
                        <Input id="name" type="text" placeholder="Your Name" class="w-full" />
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-foreground mb-1">Email</label>
                        <Input id="email" type="email" placeholder="you@example.com" class="w-full" />
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-foreground mb-1">Message</label>
                        <Textarea id="message" placeholder="Your message..." class="w-full min-h-[120px]" />
                    </div>
                    <Button type="submit" variant="default" class="mt-4 cursor-pointer w-full">Send Message</Button>
                </form>
            </div>
        </div>
    </section>
</template>
