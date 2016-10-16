import re
import sys

for arg in sys.argv:
	arg	= re.sub(r'\*\*([^*]+)\*\*', r'<\1>', arg)

print arg
