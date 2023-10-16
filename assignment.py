import math

Dvalue = (input("Enter diameter:"))
if Dvalue.isnumeric():

    diameter = float(Dvalue)
    radius = diameter/2
    circumference = diameter*(math.pi)
    area = (math.pi)*radius**2

    print("Circumference is "+str("%.2f" %circumference))

    print("Area is "+str("%.2f" %area))
else: print("Please enter a numeric value")

