from car import Car
from account import Account

def run():
    car = Car("AMS123", Account("Jose Roberto", "JSR359"))
    print(vars(car))
    print(vars(car.driver))
if __name__ == "__main__":
    run()