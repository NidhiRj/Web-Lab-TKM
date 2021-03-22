class Rectangle:
    def __init__(self, length, breadth):
        self.length = length
        self.breadth = breadth

    def getPerimeter(self):
        perimeter = 2*(self.length+self.breadth)
        return perimeter

    def getArea(self):
        area = (self.length*self.breadth)
        return area


rect1 = Rectangle(56,23)
rect2 = Rectangle(68,20)

print("Area of Rectangle 1 : "+str(rect1.getArea()))
print("Perimeter of Rectangle 1 : "+str(rect1.getPerimeter()))

print("---------------------------------------------------")

print("Area of Rectangle 2 : "+str(rect2.getArea()))
print("Perimeter of Rectangle 2 : "+str(rect2.getPerimeter()))

if(rect1.getArea()>rect2.getArea()):
    print("Rectangle 1 is bigger")
else:
    print("Rectangle 2 is bigger")
