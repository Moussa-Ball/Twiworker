import expect from "expect";
import { mount } from "@vue/test-utils";
import ExampleComponent from "../../../resources/js/components/ExampleComponent.vue";

describe("App.vue", () => {
    it("test if ExampleComponent component is mounted correctly.", () => {
        const wrapper = mount(ExampleComponent);
        expect(wrapper.html()).toContain("Example Component");
    });
});
