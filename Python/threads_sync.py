from threading import Thread, RLock

lock = RLock()

class SyncThread(Thread):
    def __init__(self, text):
        Thread.__init__(self)
        self.text = text

    def run(self):
        with lock:
            print(self.text)
            with open("synch_thread.txt", "a") as file:
                file.write(self.text)

thread_1 = SyncThread("Thread 1 /")
thread_2 = SyncThread("Thread 2 /")
thread_3 = SyncThread("Thread 3 /")
thread_4 = SyncThread("Thread 4 /")

thread_1.start()
thread_2.start()
thread_3.start()
thread_4.start()

f = open("synch_thread.txt")
f.read()