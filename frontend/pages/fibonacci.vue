<template>
    <div>
        <h1 class="text-primary text-5xl leading-12 font-bold tracking-tight">
            Fibonacci
        </h1>
        <p class="text-xl mt-8">
            This page shows the nth Fibonacci number calculated by the backend.
        </p>
        <div class="mt-8">
            <p v-if="$fetchState.pending">
                Fetching data from backend...
            </p>
            <p v-else-if="$fetchState.error">
                An error occurred :(
            </p>
            <p v-else>
                The {{ ordinal }} Fibonacci number is {{ number }}.
            </p>
        </div>
        <button @click="$fetch" class="mt-8 bg-accent text-primary rounded px-3 py-1">
            Refresh
        </button>
    </div>
</template>

<script lang="ts">
import Vue from 'vue'

export default Vue.extend({
    data: () => ({
        n: 0 as number,
        number: 0 as number,
    }),
    watch: {
        '$route.query': '$fetch'
    },
    async fetch() {
        const response = await this.$axios.$get('/api/fibonacci', {
            params: {
                n: this.parseN()
            },
        })

        this.n = response.n
        this.number = response.result
    },
    computed: {
        ordinal(): string {
            if (this.n % 10 == 1 && this.n % 100 != 11) {
                return `${this.n}st`
            }

            if (this.n % 10 == 2 && this.n % 100 != 12) {
                return `${this.n}nd`
            }

            if (this.n % 10 == 3 && this.n % 100 != 13) {
                return `${this.n}rd`
            }

            return `${this.n}th`
        }
    },
    methods: {
        parseN(): number {
            let n = this.$route.query.n || '30'

            if (Array.isArray(n)) {
                n = n[0] || '30'
            }

            return parseInt(n)
        },
    }
})
</script>
