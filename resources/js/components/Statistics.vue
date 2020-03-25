<template>
    <tile :position="position">
        <div class="grid gap-padding h-full markup">
        
            <div class="leading-tight min-w-0">
                <h2 class="truncate capitalize">
                    {{ region }}
                </h2>
            </div>
            <ul class="align-self-center">
                <li>
                    <span>Nb Cas</span>
                    <span class="font-bold variant-tabular">{{ formatNumber(totalCases) }}</span>
                </li>
                <li>
                    <span>Nb Décès</span> 
                    <span class="font-bold variant-tabular">{{ formatNumber(totalDeath) }}</span>
                </li>
                <li>
                    <span>Nb Rétablie</span>
                    <span class="font-bold variant-tabular">{{ formatNumber(totalRecovery) }}</span>
                </li>
            </ul>
        </div>
    </tile>
</template>

<script>
import { emoji, formatNumber } from '../helpers';
import echo from '../mixins/echo';
import Tile from './atoms/Tile';
import saveState from 'vue-save-state';

export default {
    components: {
        Tile,
    },

    mixins: [echo, saveState],

    props: ['position'],

    data() {
        return {
            totalCases: 0,
            totalDeath: 0,
            totalRecovered: 0,
        };
    },

    methods: {
        emoji,
        formatNumber,

        getEventHandlers() {
            return {
                'Statistics.RegionTotals': response => {
                    this.totalCases = response.totalCases;
                    this.totalDeath = response.totalDeath;
                    this.totalRecovered = response.totalRecovered;
                },
            };
        },

        getSaveStateConfig() {
            return {
                cacheKey: 'statistics',
            };
        },
    },
};
</script>
