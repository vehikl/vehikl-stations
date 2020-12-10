import Foobar from "./Foobar";

describe("Foobar", () => {
   it("Returns hi whenever we ask it to say Hi", () => {
      expect((new Foobar()).sayHi()).toEqual("Hi");
   });
});
