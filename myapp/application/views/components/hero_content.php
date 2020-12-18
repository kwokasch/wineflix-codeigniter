<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<script>
    const HeroContent = {
        name: "HeroContent",
        props: {
            heroContent: Object,
        },
        template: `
      <div class="hero-content">
        <h2>
          <img :alt=heroContent.title :src=heroContent.imageUrl>
        </h2>
        <h3>{{ heroContent.subtitle }}</h3>
        <p>{{ heroContent.description }}</p>

        <controls />
      </div>
    `
    }

</script>
