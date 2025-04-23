#!/bin/bash
# Ganti URL WordPress dalam database menggunakan WP-CLI
# Usage: ./post-deploy.sh old_url new_url
wp search-replace "$1" "$2" --all-tables --allow-root
