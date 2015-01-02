import os
import sys
import re

page = sys.argv[1]

mappings = {
    'base': 'modules/template.html',
    'header': 'modules/header.md',
    'footer': 'modules/footer.md',
    'tracking': 'modules/tracking.html',
}


def render(template, mappings):
    variables = re.findall('{{{(.*?)}}}', template)

    if not variables:
        return template

    for variable in variables:
        filename = mappings[variable]

        if '.md' in filename:
            replacement = os.popen('pandoc -f markdown -t html %s' % filename).read()
        else:
            replacement = open(filename).read()

        template = template.replace('{{{%s}}}' % variable, replacement)

    return render(template, mappings)


template = '{{{base}}}'
mappings['body'] = page

template = render(template, mappings)

filename = 'compiled/%s.html' % page.replace('.md', '')

if not os.path.exists(os.path.dirname(filename)):
    os.makedirs(os.path.dirname(filename))

with open(filename, 'w') as f:
    f.write(template)
