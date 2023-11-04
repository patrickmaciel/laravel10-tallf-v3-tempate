import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import basicSsl from '@vitejs/plugin-basic-ssl'

// 002 set the Laravel host and the port
const host = '127.0.0.1';
const port = '8000';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.scss',
        'resources/js/app.js',
        'resources/css/filament/admin/theme.css'
      ],
      refresh: true,
    }),
    basicSsl()
  ],
  server: {
    // 005 enabling the HTTPS
    https: true,
    // 006 setting the proxy with Laravel as target (origin)
    proxy: {
      '^(?!(\/\@vite|\/resources|\/node_modules))': {
        target: `http://${host}:${port}`,
      }
    },
    host,
    port: 5173,
    // 007 be sure that you have the Hot Module Replacement
    hmr: {host},
  }
});
