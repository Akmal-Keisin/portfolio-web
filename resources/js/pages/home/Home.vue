<script setup lang="ts">
    import MainLayout from '@/layouts/MainLayout.vue';
    import JumbotronSection from './sections/JumbotronSection.vue';
    import AboutSection from './sections/AboutSection.vue';
    import ProjectSection from './sections/ProjectSection.vue';
    import BlogSection from './sections/BlogSection.vue';
    import ContactSection from './sections/ContactSection.vue';
</script>
<template>
    <MainLayout>

        <!-- Jumbotron Section -->
        <JumbotronSection />

        <!-- About Section -->
        <AboutSection />

        <!-- Projects Section -->
        <ProjectSection />

        <!-- Blogs section -->
        <BlogSection />

        <!-- Contact Section -->
        <ContactSection />
    </MainLayout>
</template>
