import matplotlib.pyplot as plt; plt.rcdefaults()
import numpy as np
import matplotlib.pyplot as plt
objects =(
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun"
                )

y_pos = np.arange(len(objects))
performance =[65426,70248,87852,55694,61874,76538]

plt.bar(y_pos, performance, align='center', alpha=0.5)
plt.xticks(y_pos, objects)
plt.ylabel('number of challan')
plt.title('challans in year 2016 Jan-June')
plt.show()
