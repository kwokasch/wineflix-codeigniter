<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<script src="https://unpkg.com/vue@3"></script>
<script>
    const App = {
        name: "App",
        computed: {
            user() {
                return `<?php echo $user; ?>`
            },
            videos() {
                return [
                    <?php foreach ($videos as $video): ?>
                    {
                        id: "<?php $video['id']; ?>",
                        imageUrl: "<?php $video['image_url']; ?>",
                        isNew: "<?php $video['is_new']; ?>",
                        label: "<?php $video['label']; ?>",
                        isFinished: "<?php $video['is_finished']; ?>",
                        progress: <?php $video['progress']; ?>,
                    },
                    <?php endforeach; ?>
                ];
            },
            heroContent() {
                return {
                    title: `<?php echo $hero_content['title']; ?>`,
                    subtitle: `<?php echo $hero_content['subtitle']; ?>`,
                    imageUrl: `<?php echo $hero_content['image_url']; ?>`,
                    description: `<?php echo $hero_content['description']; ?>`,
                };
            },
            drinkAgain() {
                return this.videos.filter((video) => video.isFinished)
            },
            keepDrinking() {
                const filter = this.videos.filter((video) => video.progress)
                console.log('filter', filter)
                return this.videos.filter((video) => video.progress)
            },
        },
        template: `
        <hero :heroContent="heroContent" :user="user"/>
        <main>
          <category :wines="drinkAgain" classLabel="Drink Again" />
          <category :wines="keepDrinking" classLabel="Keep Drinking" />
    </main>
    `
    }

    const app = Vue.createApp(App)
    app.component('hero', Hero)
    app.component('navigation', Navigation)
    app.component('primary-navigation', PrimaryNavigation)
    app.component('secondary-navigation', SecondaryNavigation)
    app.component('user-avatar', UserAvatar)
    app.component('hero-content', HeroContent)
    app.component('hero-image', HeroImage)
    app.component('controls', Controls)
    app.component('primary-action', PrimaryAction)
    app.component('secondary-action', SecondaryAction)
    app.component('category', Category)
    app.component('wine', Wine)
    app.mount('#app')
</script>
