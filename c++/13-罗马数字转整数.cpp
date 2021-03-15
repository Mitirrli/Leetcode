class Solution {
public:
    int romanToInt(string s) {
        unordered_map<string, int>mmap = {{"I", 1}, {"V", 5}, {"X", 10}, {"L", 50}, 
        {"C", 100}, {"D", 500}, {"M", 1000}};

        int temp = 0;
        int sum = 0;
        for (int i = 0; i < s.size(); i++) {
            int num = mmap[s.substr(i, 1)];
            if( temp &&  num > temp ) {
                sum += num - 2 * temp;
            } else {
                sum += num;
            }
            temp = num;
        }

        return sum;
    }
};