import numpy as np
import matplotlib.pyplot as plt

N = 6
accident_means = (540, 470, 500, 575, 433, 455)
accident_std = (2, 3, 4, 1, 2, 3)

ind = np.arange(N)  # the x locations for the groups
width = 0.35       # the width of the bars

fig, ax = plt.subplots()
rects1 = ax.bar(ind, accident_means, width, color='r', yerr=accident_std)

death_means = (481, 450, 340, 490, 370, 400)
death_std = (3, 5, 2, 3, 3, 2)
rects2 = ax.bar(ind + width, death_means, width, color='y', yerr=death_std)

# add some text for labels, title and axes ticks
ax.set_ylabel('No. of Accidents/Deaths')
ax.set_title('Road Accidents and deaths in July-December 2017')
ax.set_xticks(ind + width / 2)
ax.set_xticklabels(('Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'))

ax.legend((rects1[0], rects2[0]), ('Accidents', 'Death'))


plt.show()
