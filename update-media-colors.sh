#!/bin/bash
# Run this from your laravel-app directory:
#   bash update-media-colors.sh resources/views/pages/media.blade.php
#
# It updates the media page from red/orange brand colors to AVEC purple/blue
# AND swaps fintech-era copy to AI/infrastructure framing.

FILE="$1"
if [ -z "$FILE" ]; then
    echo "Usage: bash update-media-colors.sh path/to/media.blade.php"
    exit 1
fi

cp "$FILE" "${FILE}.bak"
echo "Backed up to ${FILE}.bak"

# === BRAND COLOR CHANGES (red → purple/blue) ===
# Background gradients
sed -i 's/via-red-900/via-purple-900/g' "$FILE"
sed -i 's/from-red-600\/30/from-violet-600\/30/g' "$FILE"
sed -i 's/from-red-500\/20/from-violet-500\/20/g' "$FILE"
sed -i 's/from-red-600\/20/from-violet-600\/20/g' "$FILE"
sed -i 's/from-red-600\/10/from-violet-600\/10/g' "$FILE"
sed -i 's/from-red-500\/10/from-violet-500\/10/g' "$FILE"
sed -i 's/from-red-900\/30/from-violet-900\/30/g' "$FILE"
sed -i 's/from-red-800\/20/from-violet-800\/20/g' "$FILE"
sed -i 's/from-red-900\/20/from-violet-900\/20/g' "$FILE"
sed -i 's/from-red-800\/10/from-violet-800\/10/g' "$FILE"
sed -i 's/from-red-700\/10/from-violet-700\/10/g' "$FILE"
sed -i 's/from-red-700\/20/from-violet-700\/20/g' "$FILE"
sed -i 's/from-red-900\/10/from-violet-900\/10/g' "$FILE"
sed -i 's/to-red-500\/20/to-violet-500\/20/g' "$FILE"
sed -i 's/to-red-800\/20/to-violet-800\/20/g' "$FILE"
sed -i 's/to-red-900\/20/to-violet-900\/20/g' "$FILE"
sed -i 's/to-red-900\/30/to-violet-900\/30/g' "$FILE"
sed -i 's/to-red-800\/10/to-violet-800\/10/g' "$FILE"
sed -i 's/to-pink-500\/20/to-violet-500\/20/g' "$FILE"

# Borders
sed -i 's/border-red-500\/20/border-violet-500\/20/g' "$FILE"
sed -i 's/border-red-500\/30/border-violet-500\/30/g' "$FILE"
sed -i 's/border-red-500\/40/border-violet-500\/40/g' "$FILE"

# Background fills
sed -i 's/bg-red-600\/20/bg-violet-600\/20/g' "$FILE"
sed -i 's/bg-red-600\/10/bg-violet-600\/10/g' "$FILE"
sed -i 's/bg-red-600\/15/bg-violet-600\/15/g' "$FILE"
sed -i 's/bg-red-600\/40/bg-violet-600\/40/g' "$FILE"
sed -i 's/bg-red-900\/10/bg-violet-900\/10/g' "$FILE"
sed -i 's/bg-red-900\/20/bg-violet-900\/20/g' "$FILE"
sed -i 's/bg-red-900\/30/bg-violet-900\/30/g' "$FILE"

# Hover backgrounds
sed -i 's/hover:bg-red-600\/15/hover:bg-violet-600\/15/g' "$FILE"
sed -i 's/hover:bg-red-600\/40/hover:bg-violet-600\/40/g' "$FILE"
sed -i 's/hover:bg-red-900\/20/hover:bg-violet-900\/20/g' "$FILE"
sed -i 's/hover:bg-red-900\/30/hover:bg-violet-900\/30/g' "$FILE"

# Text colors
sed -i 's/text-red-300/text-violet-300/g' "$FILE"
sed -i 's/text-red-400/text-violet-400/g' "$FILE"
sed -i 's/text-red-200/text-violet-200/g' "$FILE"

# Gradient text spans
sed -i 's/from-red-400 to-red-600 bg-clip-text/from-violet-400 to-blue-500 bg-clip-text/g' "$FILE"

# CTA button gradients (NOT the YouTube button - that stays red)
sed -i 's/from-red-600 to-red-700 text-white font-semibold rounded-xl/from-violet-600 to-blue-600 text-white font-semibold rounded-xl/g' "$FILE"

# Floating stats card
sed -i 's/from-red-600 to-red-700 rounded-xl p-4 shadow-xl text-white/from-violet-600 to-blue-600 rounded-xl p-4 shadow-xl text-white/g' "$FILE"

# Decorative blur elements
sed -i 's/from-red-500 to-pink-500 rounded-full/from-violet-500 to-blue-500 rounded-full/g' "$FILE"
sed -i 's/from-red-600 to-red-700 rounded-full/from-violet-600 to-blue-600 rounded-full/g' "$FILE"

# Hover text
sed -i 's/group-hover:text-red-300/group-hover:text-violet-300/g' "$FILE"
sed -i 's/hover:text-red-300/hover:text-violet-300/g' "$FILE"
sed -i 's/hover:text-red-200/hover:text-violet-200/g' "$FILE"

# Episode card dynamic gradients
sed -i 's/from-red-{{ 500/from-violet-{{ 500/g' "$FILE"
sed -i 's/to-red-{{ 600/to-blue-{{ 500/g' "$FILE"

# Watch Episode / queue play buttons
sed -i 's/bg-red-600\/20 hover:bg-red-600\/40 text-red-300 hover:text-white/bg-violet-600\/20 hover:bg-violet-600\/40 text-violet-300 hover:text-white/g' "$FILE"

# Episode number badges
sed -i 's/bg-red-600 text-white px-3 py-1 rounded-full text-xs font-bold/bg-violet-600 text-white px-3 py-1 rounded-full text-xs font-bold/g' "$FILE"
sed -i 's/bg-red-600 text-white px-2 py-1 rounded-full text-xs font-bold/bg-violet-600 text-white px-2 py-1 rounded-full text-xs font-bold/g' "$FILE"

# Small dots
sed -i 's/w-2 h-2 bg-red-500 rounded-full animate-pulse/w-2 h-2 bg-violet-500 rounded-full animate-pulse/g' "$FILE"
sed -i 's/w-3 h-3 bg-red-500 rounded-full/w-3 h-3 bg-violet-500 rounded-full/g' "$FILE"

# Checkmark circles
sed -i 's/w-6 h-6 bg-red-600 rounded-full/w-6 h-6 bg-violet-600 rounded-full/g' "$FILE"

# Mixed icon gradients (keep platform color, change red half to violet)
sed -i 's/from-blue-600 to-red-600/from-blue-600 to-violet-600/g' "$FILE"
sed -i 's/from-yellow-600 to-red-600/from-amber-500 to-violet-600/g' "$FILE"
sed -i 's/from-green-600 to-red-600/from-emerald-500 to-violet-600/g' "$FILE"
sed -i 's/from-purple-600 to-red-600/from-purple-600 to-violet-600/g' "$FILE"
sed -i 's/from-gray-800 to-red-600/from-gray-800 to-violet-600/g' "$FILE"

# Yellow badge → cyan
sed -i 's/from-yellow-600\/20 to-red-600\/20/from-cyan-600\/20 to-violet-600\/20/g' "$FILE"
sed -i 's/border-yellow-500\/30/border-cyan-500\/30/g' "$FILE"
sed -i 's/text-yellow-300/text-cyan-300/g' "$FILE"

# Form inputs
sed -i 's/focus:ring-red-500/focus:ring-violet-500/g' "$FILE"
sed -i 's/text-red-600 bg-red-900\/20 border-red-500\/30 rounded focus:ring-red-500/text-violet-600 bg-violet-900\/20 border-violet-500\/30 rounded focus:ring-violet-500/g' "$FILE"

# Checkbox checked color (CSS)
sed -i 's/#dc2626/#8b5cf6/g' "$FILE"

# === CONTENT CHANGES (fintech → AI/infrastructure) ===
sed -i "s/Empowering Africa's Fintech Future/Building Africa's Digital Future/g" "$FILE"
sed -i 's/fintech innovation and building limitless careers in Africa/AI, digital infrastructure, and building limitless careers in Africa/g' "$FILE"
sed -i 's/Exclusive fintech insights/AI \& infrastructure insights/g' "$FILE"
sed -i 's/fintech innovation, discover content that builds limitless careers/AI and digital infrastructure, discover content that builds limitless careers/g' "$FILE"
sed -i 's/leading voice in African fintech and/leading voice in AI, digital infrastructure, and/g' "$FILE"
sed -i 's/digital transformation\./technology innovation across Africa./g' "$FILE"
sed -i 's/fintech innovation, mindset transformation, and building limitless/AI and digital infrastructure, mindset transformation, and building limitless/g' "$FILE"
sed -i 's/insights on fintech innovation/insights on AI and digital infrastructure/g' "$FILE"
sed -i 's/on African fintech/on AI, digital infrastructure,/g' "$FILE"

# Count remaining issues
echo ""
echo "=== RESULTS ==="
FINTECH=$(grep -c "fintech" "$FILE" 2>/dev/null || echo 0)
RED_BRAND=$(grep -c "red-[0-9]" "$FILE" 2>/dev/null || echo 0)
echo "Remaining 'fintech' mentions: $FINTECH (check these manually)"
echo "Remaining 'red-*' classes: $RED_BRAND (YouTube buttons should stay red)"
echo ""
echo "MANUAL CHECK NEEDED:"
grep -n "fintech" "$FILE" 2>/dev/null || echo "  (none)"
echo ""
echo "Done! Original backed up to ${FILE}.bak"
