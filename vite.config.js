import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
      laravel({
        input: [
          'resources/sass/app-admin.scss',          
          'resources/sass/app-auth.scss',
          'resources/sass/app-front.scss',
          'resources/js/app-admin.js',
          'resources/js/app-front.js',
        ],
        refresh: true,
      }),
    ],
});