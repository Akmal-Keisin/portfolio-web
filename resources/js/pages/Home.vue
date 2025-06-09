<script setup lang="ts">
    import MainLayout from '@/layouts/MainLayout.vue';
    import Button from '@/components/ui/button/Button.vue';
    import Input from '@/components/ui/input/Input.vue';
    import Textarea from '@/components/ui/textarea/Textarea.vue';
</script>
<template>
    <MainLayout>

        <!-- Jumbotron -->
        <section
            class="flex justify-around items-center gap-6 bg-background border-b border-border shadow-sm min-h-[calc(100vh-72px)] flex-col md:flex-row">
            <div class="w-full max-w-2xl flex flex-col gap-4">
                <h2 class="text-xl font-semibold text-foreground">Hi, my name is</h2>
                <h1 class="text-6xl md:text-7xl font-thin text-foreground leading-tight">
                    Kei, always trying to be a <span class="text-primary">"Key"</span> of any <span
                        class="font-bold">problem</span>
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
                class="w-[600px] h-[400px] bg-primary rounded-xl flex items-center justify-center text-background font-bold text-lg">
                Image Sample
            </div>
        </section>

        <!-- About Section -->
        <section
            class="bg-background border-b border-border shadow-sm px-4 py-16 flex justify-around items-center gap-6">
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
                <p class="text-lg text-muted-foreground">
                    I'm currently focusing on backend development, but I'm also interested in frontend development and
                    software development in general. I love to learn new things and solve problems. I'm always looking
                    for opportunities to improve my skills and knowledge at software development world.
                </p>
            </div>
        </section>

        <!-- Projects Section -->
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

        <!-- Blogs section -->
        <section class="bg-background border-b border-border shadow-sm px-4 py-16">
            <div class="max-w-7xl mx-auto px-4 py-16">
                <h2 class="text-3xl font-semibold text-foreground text-center mb-6">Blogs</h2>
                <p class="text-lg text-muted-foreground text-center mb-4">
                    I will try to write the journey of my learning and exploring software development world in this blog
                    section. Your feedback and comments are very welcome!
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-card border border-border rounded-xl shadow-sm flex flex-col overflow-hidden">
                        <img src="https://via.placeholder.com/600x300?text=Project+1" alt="Project 1"
                            class="w-full h-48 object-cover" />
                        <div class="flex flex-col flex-1 p-6 gap-4">
                            <h3 class="text-xl font-semibold text-foreground">Blog One</h3>
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
                            <h3 class="text-xl font-semibold text-foreground">Blog Two</h3>
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
                            <h3 class="text-xl font-semibold text-foreground">Blog Three</h3>
                            <p class="text-muted-foreground flex-1">
                                A brief description of Project Three. Focused on performance and user experience.
                            </p>
                            <Button variant="default" class="self-start mt-2">Read More</Button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="bg-background border-b border-border shadow-sm px-4 py-16">
            <div class="max-w-xl mx-auto">
                <div class="bg-card border border-border rounded-xl shadow-sm p-8">
                    <h2 class="text-3xl font-semibold text-foreground mb-6 text-center">Contact Me</h2>
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

        <!-- Footer Section -->
        <footer class="bg-muted text-muted-foreground border-t border-border py-10">
            <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-8">
                <!-- Branding / Logo -->
                <div class="flex flex-col items-center md:items-start gap-2">
                    <span class="text-2xl font-bold text-primary">Kei</span>
                    <span class="text-sm">Backend Developer & Software Enthusiast</span>
                </div>
                <!-- Navigation Links -->
                <nav class="flex gap-6">
                    <a href="#about" class="hover:text-primary transition-colors">About</a>
                    <a href="#projects" class="hover:text-primary transition-colors">Projects</a>
                    <a href="#blogs" class="hover:text-primary transition-colors">Blogs</a>
                    <a href="#contact" class="hover:text-primary transition-colors">Contact</a>
                </nav>
                <!-- Social Media Icons -->
                <div class="flex gap-4">
                    <a href="https://github.com/" target="_blank" aria-label="GitHub"
                        class="hover:text-primary transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 .5C5.73.5.5 5.73.5 12c0 5.08 3.29 9.39 7.86 10.91.58.11.79-.25.79-.56 0-.28-.01-1.02-.02-2-3.2.7-3.88-1.54-3.88-1.54-.53-1.34-1.29-1.7-1.29-1.7-1.06-.73.08-.72.08-.72 1.17.08 1.78 1.2 1.78 1.2 1.04 1.78 2.73 1.27 3.4.97.11-.75.41-1.27.74-1.56-2.56-.29-5.26-1.28-5.26-5.7 0-1.26.45-2.29 1.19-3.1-.12-.29-.52-1.46.11-3.05 0 0 .97-.31 3.18 1.18a11.1 11.1 0 0 1 2.9-.39c.98 0 1.97.13 2.9.39 2.2-1.49 3.17-1.18 3.17-1.18.63 1.59.23 2.76.11 3.05.74.81 1.19 1.84 1.19 3.1 0 4.43-2.7 5.41-5.27 5.7.42.36.79 1.09.79 2.2 0 1.59-.01 2.87-.01 3.26 0 .31.21.67.8.56C20.71 21.39 24 17.08 24 12c0-6.27-5.23-11.5-12-11.5z" />
                        </svg>
                    </a>
                    <a href="https://twitter.com/" target="_blank" aria-label="Twitter"
                        class="hover:text-primary transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.46 5.94c-.8.36-1.66.6-2.56.71a4.48 4.48 0 0 0 1.97-2.48 8.93 8.93 0 0 1-2.83 1.08 4.48 4.48 0 0 0-7.64 4.09A12.72 12.72 0 0 1 3.1 4.86a4.48 4.48 0 0 0 1.39 5.98c-.7-.02-1.36-.21-1.94-.53v.05a4.48 4.48 0 0 0 3.6 4.39c-.33.09-.68.14-1.04.14-.25 0-.5-.02-.74-.07a4.48 4.48 0 0 0 4.18 3.11A9 9 0 0 1 2 19.54a12.7 12.7 0 0 0 6.88 2.02c8.26 0 12.78-6.84 12.78-12.78 0-.19 0-.39-.01-.58a9.14 9.14 0 0 0 2.25-2.33z" />
                        </svg>
                    </a>
                    <a href="https://linkedin.com/" target="_blank" aria-label="LinkedIn"
                        class="hover:text-primary transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.28c-.97 0-1.75-.79-1.75-1.75s.78-1.75 1.75-1.75 1.75.79 1.75 1.75-.78 1.75-1.75 1.75zm13.5 11.28h-3v-5.6c0-1.34-.03-3.07-1.87-3.07-1.87 0-2.16 1.46-2.16 2.97v5.7h-3v-10h2.89v1.36h.04c.4-.75 1.37-1.54 2.82-1.54 3.01 0 3.57 1.98 3.57 4.56v5.62z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="mt-8 text-center text-xs text-muted-foreground/70">
                &copy; {{ new Date().getFullYear() }} Kei. All rights reserved.
            </div>
        </footer>
    </MainLayout>
</template>
