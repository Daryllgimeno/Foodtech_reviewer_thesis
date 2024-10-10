// vite.config.js

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.jsx'], // Ensure this matches your entry file
            refresh: true,
        }),
        react(),
    ],
    server: {
        host: 'localhost',
        port: 3000,
        strictPort: true,
    },
});
