import matplotlib.pyplot as plt; plt.rcdefaults()
import numpy as np
import matplotlib.pyplot as plt
objects =(
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec"
                )

y_pos = np.arange(len(objects))
performance =[55426,70248,57852,85694,61874,79538]

plt.bar(y_pos, performance, align='center', alpha=0.5)
plt.xticks(y_pos, objects)
plt.ylabel('number of challan')
plt.title('challans in year 2016 Jul-Dec')
plt.show()
