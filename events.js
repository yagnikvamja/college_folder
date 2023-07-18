import { EventEmitter } from 'node:events';

class MyEmitter extends EventEmitter {}

const myEmitter = new MyEmitter();
myEmitter.on('event', () => {
  console.log('Time for Magic .. Lets make for dream true wait for 7sec');
  setTimeout(() => {
    console.log("You are transffered to module 2")
  },7000)
});

console.log("The script or program is running..")
myEmitter.emit('event');