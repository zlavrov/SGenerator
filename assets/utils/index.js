export const createCopyResponse = async (value) => {

    try {

        let result = '';
        for(const item of value) {result += item + '\n';}
        await navigator.clipboard.writeText(result);
    } catch (err) {

        console.error('Failed to copy text: ', err);
    }
};
