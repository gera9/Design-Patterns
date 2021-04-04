import abc

# Structure
class Component(metaclass=abc.ABCMeta):
    @abc.abstractmethod
    def execute(self):
        pass

# Object to wrap
class ConcreteComponent(Component):
    def execute(self):
        print("My component do this.")

""" 
    Base Decorator to put the similar code of 
    your Concrete Decorators thought inheritance 
"""
class BaseDecorator(Component):
    def __init__(self, c: Component):
        self.wrappee = c

    def execute(self):
        self.wrappee.execute()

# The wrapper
class ConcreteDecorator(BaseDecorator):
    def execute(self):
        self.more()
        return super().execute()

    def more(self):
        print("Decorated!")


example = ConcreteDecorator(ConcreteComponent())
example.execute()