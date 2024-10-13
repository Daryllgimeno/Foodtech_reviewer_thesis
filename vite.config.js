// vite.config.js

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
// import fs from 'fs'; // Only needed if configuring HTTPS

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js'], // Ensure this matches your entry file
            refresh: true,
        }),
        react(),
    ],
    build: {
        sourcemap: false,
    },

    server: {
        host: 'localhost', // Use 'localhost' or '127.0.0.1'
        port: 5443,        // Set to Vite's default port
        strictPort: true,  // Ensures Vite fails if the port is in use
        ignored: ['**/node_modules/**', '**/storage/**', '**/vendor/**'],
        // Optional: Enable polling if using environments like Docker or WSL2
        watch: {
            usePolling: true,
        },
        watch: {
            usePolling: false,
        },
        // HMR Configuration
        hmr: {
            host: 'localhost',
            port: 5443, // Same as the dev server port
            protocol: 'ws', // Use 'ws' for WebSocket
            overlay: false,
            // Optional: If using HTTPS, set protocol to 'wss'
        },
        // Optional: HTTPS Configuration
        // Uncomment and set paths if using HTTPS
        /*
        https: {
            key: fs.readFileSync('/path/to/your/localhost-key.pem'),
            cert: fs.readFileSync('/path/to/your/localhost.pem'),
        },
        */
    }
});
