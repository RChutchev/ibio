<template>
    <fwb-accordion-panel>
        <fwb-accordion-header>
            <slot name="header"></slot>
        </fwb-accordion-header>
        <fwb-accordion-content>
            <slot name="content"></slot>
        </fwb-accordion-content>
    </fwb-accordion-panel>
</template>

<script setup>
import { FwbAccordionPanel, FwbAccordionHeader, FwbAccordionContent } from 'flowbite-vue'
</script>