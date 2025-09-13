#!/usr/bin/env bash
set -Eeuo pipefail

echo "Installing PHP dependencies (no-dev, optimized)..."
composer install -n -o --no-dev --prefer-dist

echo "Installing Node dependencies..."
if command -v npm >/dev/null 2>&1; then
  npm ci --omit=optional --audit=false
else
  echo "npm not found on PATH" >&2
  exit 1
fi

echo "Building assets..."
npm run build:ci

echo "Deploy script completed successfully."
