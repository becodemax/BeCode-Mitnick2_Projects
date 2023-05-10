
from threading import Thread
import time

class ThreadFunction(Thread):
    def __init__(self, name):
        Thread.__init__(self)
        self.name = name

    def run(self):
        print(f"Thread {self.name}: starting")
        time.sleep(0.5)
        print(f"Thread {self.name}: finishing")


for i in range(5):
    thread = ThreadFunction(i)
    thread.start()