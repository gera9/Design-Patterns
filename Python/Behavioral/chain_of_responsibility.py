import abc

class Client:
    pass

class Handler(metaclass=abc.ABCMeta):
    @abc.abstractclassmethod
    def HandleRequest(self):
        pass

class ConcreteHandler1(Handler):
    pass