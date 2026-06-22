#!/bin/bash
# Universal color + content updater for AVEC purple/blue rebrand
# Usage: bash update-page-colors.sh path/to/file.blade.php
# Works on: contact, blog/index, blog/show, blog/category, or any other page

FILE="$1"
if [ -z "$FILE" ]; then
    echo "Usage: bash update-page-colors.sh path/to/file.blade.php"
    exit 1
fi

cp "$FILE" "${FILE}.bak"
echo "Backed up to ${FILE}.bak"

# === BRAND COLORS ===

# Gradient backgrounds (decorative)
sed -i 's/from-orange-100/from-violet-100/g' "$FILE"
sed -i 's/to-amber-100/to-violet-100/g' "$FILE"
sed -i 's/from-amber-100/from-violet-100/g' "$FILE"
sed -i 's/to-orange-100/to-blue-100/g' "$FILE"
sed -i 's/from-yellow-100/from-cyan-100/g' "$FILE"
sed -i 's/to-yellow-100/to-cyan-100/g' "$FILE"
sed -i 's/from-amber-200\/30/from-violet-200\/30/g' "$FILE"
sed -i 's/to-orange-200\/30/to-blue-200\/30/g' "$FILE"
sed -i 's/from-yellow-200\/30/from-cyan-200\/30/g' "$FILE"
sed -i 's/to-amber-200\/30/to-violet-200\/30/g' "$FILE"

# Badge/pill backgrounds
sed -i 's/from-amber-50/from-violet-50/g' "$FILE"
sed -i 's/to-orange-50/to-blue-50/g' "$FILE"
sed -i 's/from-orange-50/from-violet-50/g' "$FILE"
sed -i 's/border-amber-200/border-violet-200/g' "$FILE"
sed -i 's/border-orange-200/border-violet-200/g' "$FILE"
sed -i 's/text-amber-800/text-violet-800/g' "$FILE"
sed -i 's/text-amber-700/text-violet-700/g' "$FILE"

# Gradient text spans
sed -i 's/from-orange-600 via-amber-600 to-red-600 bg-clip-text/from-violet-600 via-blue-600 to-cyan-600 bg-clip-text/g' "$FILE"
sed -i 's/from-amber-600 to-orange-600 bg-clip-text/from-violet-600 to-blue-600 bg-clip-text/g' "$FILE"
sed -i 's/from-orange-600 to-red-600 bg-clip-text/from-violet-600 to-blue-600 bg-clip-text/g' "$FILE"

# Text colors
sed -i 's/text-orange-600/text-violet-600/g' "$FILE"
sed -i 's/text-orange-700/text-violet-700/g' "$FILE"
sed -i 's/text-orange-800/text-violet-800/g' "$FILE"
sed -i 's/text-orange-100/text-violet-100/g' "$FILE"
sed -i 's/text-orange-200/text-violet-200/g' "$FILE"
sed -i 's/text-amber-600/text-violet-600/g' "$FILE"
sed -i 's/text-yellow-200/text-cyan-200/g' "$FILE"

# Hover text
sed -i 's/hover:text-orange-600/hover:text-violet-600/g' "$FILE"
sed -i 's/hover:text-orange-700/hover:text-violet-700/g' "$FILE"

# Focus rings
sed -i 's/focus:ring-orange-500/focus:ring-violet-500/g' "$FILE"
sed -i 's/focus:ring-orange-300/focus:ring-violet-300/g' "$FILE"

# Button gradients
sed -i 's/from-orange-600 to-red-600/from-violet-600 to-blue-600/g' "$FILE"
sed -i 's/from-red-600 to-orange-600/from-blue-600 to-violet-600/g' "$FILE"
sed -i 's/from-amber-600 via-orange-600 to-red-600/from-violet-600 via-blue-600 to-cyan-600/g' "$FILE"

# JS class references (form submit handlers)
sed -i "s/'from-orange-600'/'from-violet-600'/g" "$FILE"
sed -i "s/'to-red-600'/'to-blue-600'/g" "$FILE"
sed -i "s/'border-orange-500'/'border-violet-500'/g" "$FILE"
sed -i "s/'bg-orange-50'/'bg-violet-50'/g" "$FILE"

# Icon gradients (amber/orange brand)
sed -i 's/from-amber-500 to-orange-500/from-violet-500 to-blue-500/g' "$FILE"

# CTA section backgrounds
sed -i 's/text-amber-700/text-violet-700/g' "$FILE"

# Blog-specific: prose accent color
sed -i 's/prose-orange/prose-violet/g' "$FILE"
sed -i 's/bg-orange-100 text-orange-800 hover:bg-orange-200/bg-violet-100 text-violet-800 hover:bg-violet-200/g' "$FILE"

# Blog sidebar newsletter
sed -i 's/from-orange-500 to-red-600 rounded-2xl/from-violet-500 to-blue-600 rounded-2xl/g' "$FILE"
sed -i 's/text-orange-100/text-violet-100/g' "$FILE"
sed -i 's/text-orange-600/text-violet-600/g' "$FILE"

# Blog author bio gradient
sed -i 's/from-orange-500 to-red-600 rounded-full/from-violet-500 to-blue-600 rounded-full/g' "$FILE"
sed -i 's/bg-gradient-to-br from-orange-5/bg-gradient-to-br from-violet-5/g' "$FILE"

# Blog progress bar and link colors in CSS
sed -i 's/#ea580c/#8b5cf6/g' "$FILE"

# Background section gradient
sed -i 's/to-orange-50 py/to-violet-50 py/g' "$FILE"

# Focus box shadow in CSS
sed -i 's/234, 88, 12/139, 92, 246/g' "$FILE"

# === CONTENT CHANGES ===
sed -i "s/Africa's fintech ecosystem/Africa's digital ecosystem/g" "$FILE"
sed -i "s/fintech innovation, women in tech, and digital transformation/AI and digital infrastructure, women in tech, and technology innovation/g" "$FILE"
sed -i "s/fintech, technology, financial services, and emerging markets/AI, digital infrastructure, technology, and emerging markets/g" "$FILE"
sed -i "s/fintech trends/AI and infrastructure trends/g" "$FILE"
sed -i "s/fintech experience/technology experience/g" "$FILE"
sed -i "s/Fintech Thought Leader/CEO, AVEC Technologies/g" "$FILE"
sed -i "s/Fintech thought leader/CEO of AVEC Technologies/g" "$FILE"
sed -i "s/fintech innovation/AI and digital infrastructure/g" "$FILE"
sed -i 's/fintech-ai">Fintech \& AI in Africa/ai-infrastructure">AI \& Digital Infrastructure in Africa/g' "$FILE"
sed -i "s/Fintech \& Digital Banking/AI \& Digital Infrastructure/g" "$FILE"

echo ""
echo "=== RESULTS ==="
FINTECH=$(grep -ci "fintech" "$FILE" 2>/dev/null || echo 0)
ORANGE=$(grep -c "orange" "$FILE" 2>/dev/null || echo 0)
echo "Remaining 'fintech': $FINTECH"
echo "Remaining 'orange': $ORANGE"
if [ "$FINTECH" -gt 0 ] || [ "$ORANGE" -gt 0 ]; then
    echo ""
    echo "MANUAL CHECK:"
    grep -n "fintech\|orange" "$FILE" 2>/dev/null
fi
echo ""
echo "Done! Backup: ${FILE}.bak"
