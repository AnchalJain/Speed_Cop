
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
performance =[85426,70248,67852,75694,81874,76538]

plt.bar(y_pos, performance, align='center', alpha=0.5)
plt.xticks(y_pos, objects)
plt.ylabel('number of challan')
plt.title('challans in year 2017 January-June')
plt.show()
