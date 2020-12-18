<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<script>
    const Controls = {
        name: "Controls",
        computed: {
            primaryAction() {
                return {
                    symbol: ' > ',
                    label: 'Drink',
                }
            },
            secondaryAction() {
                return {
                    symbol: ' i ',
                    label: 'More Info',
                }
            },
        },
        template: `
        <ul class="controls">
          <li>
            <primary-action :primaryAction="primaryAction"/>
          </li>
          <li>
            <secondary-action :secondaryAction="secondaryAction" />
          </li>
        </ul>
    `
    }
</script>
