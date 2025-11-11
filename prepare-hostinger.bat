@echo off
REM Windows batch script untuk prepare files untuk Hostinger
REM Run ini di folder root project

echo.
echo =========================================
echo Prepare Laravel untuk Hostinger Deployment
echo =========================================
echo.

REM Check if we're in the right directory
if not exist "artisan" (
    echo ERROR: artisan file not found. Run this from project root.
    exit /b 1
)

echo Step 1: Compile assets...
call npm install
if errorlevel 1 (
    echo ERROR: npm install failed
    exit /b 1
)
call npm run build
if errorlevel 1 (
    echo ERROR: npm run build failed
    exit /b 1
)
echo [OK] Assets compiled

echo.
echo Step 2: Install PHP dependencies...
call composer install --optimize-autoloader --no-dev
if errorlevel 1 (
    echo ERROR: composer install failed
    exit /b 1
)
echo [OK] Dependencies installed

echo.
echo Step 3: Generate APP_KEY...
php artisan key:generate
echo [OK] APP_KEY generated

echo.
echo Step 4: Clear caches...
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
echo [OK] Caches cleared

echo.
echo =========================================
echo Ready for deployment!
echo =========================================
echo.
echo Next steps:
echo 1. Update .env.hostinger with your Hostinger credentials
echo 2. Upload ALL files to public_html/ via SFTP or cPanel File Manager
echo 3. Rename .env.hostinger to .env on Hostinger
echo 4. Via SSH, run: bash setup-hostinger.sh
echo 5. Run migrations: php artisan migrate --force
echo.
echo See HOSTINGER_DEPLOYMENT_GUIDE.md for detailed instructions
echo.
pause
