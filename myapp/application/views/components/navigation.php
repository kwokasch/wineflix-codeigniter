<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<script>
    const Navigation = {
        name: "Navigation",
        props: {
            user: String,
        },
        computed: {
            primaryNavigationLinks() {
                return {
                    home: {
                        href: '#',
                        label: 'Home',
                    },
                    whites: {
                        href: '#',
                        label: 'Whites',
                    },
                    reds: {
                        href: '#',
                        label: 'Reds',
                    },
                    blends: {
                        href: '#',
                        label: 'Blends',
                    },
                }
            }
        },
        template: `
        <nav class="navigation">
            <primary-navigation :primaryNavigationLinks="primaryNavigationLinks"/>
            <secondary-navigation :user="user"/>
        </nav>
        `
    }

</script>
