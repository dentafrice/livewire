import os
import sys
import re

page = sys.argv[1]

mappings = {
    # 'base': 'modules/template.html',
    # 'tracking': 'modules/tracking.html',
    # 'highlighter': 'modules/highlighter.html',
    'site_url': '/',
    'content': page,
}

os.popen('pandoc -f markdown -t html5 --section-divs modules/header.md -o build/header.html')
os.popen('pandoc -f markdown -t html5 --section-divs modules/footer.md -o build/footer.html')


def render(template, mappings):
    variables = re.findall('{{{(.*?)}}}', template)

    if not variables:
        return template

    for variable in variables:
        value = mappings[variable]

        if '.md' in value:
            replacement = os.popen(
                'pandoc -B build/header.html -A build/footer.html -s -f markdown -t html5'
                + ' -T "Caleb Mingle" --toc --template modules/template.html'
                + ' --include-after-body modules/tracking.html'
                + ' -c "{{{site_url}}}assets/default.css" --section-divs %s' % value
            ).read()
        else:
            replacement = value

        template = template.replace('{{{%s}}}' % variable, replacement)

    return render(template, mappings)


template = render('{{{content}}}', mappings)

filename = 'build/%s.html' % page.replace('.md', '')

if not os.path.exists(os.path.dirname(filename)):
    os.makedirs(os.path.dirname(filename))

with open(filename, 'w') as f:
    f.write(template)
