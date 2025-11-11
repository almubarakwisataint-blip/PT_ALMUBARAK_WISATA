#!/bin/bash
# Script Setup untuk Hostinger (Jalankan via SSH)
# Usage: bash setup-hostinger.sh

set -e

echo "========================================="
echo "Setup Laravel di Hostinger - public_html"
echo "========================================="
echo ""

# Step 1: Verify we're in the right directory
if [ ! -f "artisan" ]; then
    echo "❌ Error: artisan file not found. Run this script from public_html directory."
    exit 1
fi

echo "✓ Found Laravel installation"
echo ""

# Step 2: Set permissions
echo "🔐 Setting file permissions..."
chmod -R 755 .
chmod -R 777 storage/
chmod -R 777 bootstrap/cache/
chmod 600 .env

echo "✓ Permissions set"
echo ""

# Step 3: Install PHP dependencies
echo "📦 Installing Composer dependencies..."
composer install --optimize-autoloader --no-dev
echo "✓ Composer dependencies installed"
echo ""

# Step 4: Clear caches
echo "🧹 Clearing Laravel caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
echo "✓ Caches cleared"
echo ""

# Step 5: Optimize application
echo "⚡ Optimizing application..."
php artisan optimize
php artisan config:cache
php artisan route:cache
echo "✓ Application optimized"
echo ""

# Step 6: Storage link
echo "🔗 Creating storage link..."
php artisan storage:link 2>/dev/null || echo "⚠ Storage link already exists or couldn't be created"
echo ""

# Step 7: Database migration (optional - ask user)
echo "❓ Run database migrations? (yes/no)"
read -r run_migrate

if [ "$run_migrate" = "yes" ]; then
    echo "📊 Running migrations..."
    php artisan migrate --force
    echo "✓ Migrations completed"
else
    echo "⏭ Skipping migrations"
fi

echo ""

# Step 8: Summary
echo "========================================="
echo "✓ Setup Complete!"
echo "========================================="
echo ""
echo "Next steps:"
echo "1. Verify .env configuration is correct"
echo "2. Visit https://yourdomain.com in browser"
echo "3. Check logs: cat storage/logs/laravel.log"
echo "4. Setup backup & monitoring"
echo ""
echo "For issues, check:"
echo "- storage/logs/laravel.log"
echo "- Make sure MySQL user has all privileges"
echo "- Verify PHP extensions are enabled in cPanel"
echo ""
