import {mount} from "@vue/test-utils";
import ExampleComponent from "./ExampleComponent.vue";

describe('ExampleComponent', () => {
    it('renders I am example component', () => {
       const wrapper = mount(ExampleComponent);

       expect(wrapper.text()).toContain("I'm an example component.")
    });
});
