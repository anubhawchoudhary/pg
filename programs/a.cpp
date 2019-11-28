#include <bits/stdc++.h>
using namespace std;
typedef long long ll;

// struct node{
//     ll weight;
//     //int 
// };

ll maxProfit(vector<ll>* edges, int sv, bool* visited, ll* w, ll* dp){

    if (dp[sv] != -1){
        return dp[sv];
    }
    ll sum = w[sv];
    visited[sv] = true;
    ll currSum = 0;
    int n = edges[sv].size();
    for (int i = 0; i < n; i++){
        int neighbor = edges[sv][i];
        if (!visited[neighbor]){
            currSum = max(currSum, maxProfit(edges, neighbor, visited, w, dp));
        }
    }
    visited[sv] = false;
    return (dp[sv] = sum + currSum);
}

int main(){
    ll n, m;
    cin >> n >> m;
    vector<ll>* edges = new vector<ll>[n];
    ll* w = new ll[n];
    for (int i = 0; i < n; i++){
        cin >> w[i];
    }
    for (int i = 0; i<m; i++){
        ll f,s;
        cin >> f >> s;
        edges[f - 1].push_back(s - 1);
        edges[s - 1].push_back(f - 1);
    }

    int sv;
    cin >> sv;
    bool* visited = new bool[n];
    for (int i = 0; i < n; ++i){
        visited[i] = false;
    }

    ll* dp = new ll[n];
    for (int i = 0; i < n; ++i){
        dp[i] = -1;
    }
    cout << maxProfit(edges, sv - 1, visited, w, dp) << endl;
    return 0;
}