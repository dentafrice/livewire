rm -rf build
mkdir build

for file in $(find pages -name "*.md") ; do
    python scripts/build_page.py "$file"
done;
