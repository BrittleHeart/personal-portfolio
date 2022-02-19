/**
 * gets posts from state
 * @param state
 * @returns array
 */
export const posts = (state) => state.posts

/**
 * return posts length
 * @param state
 * @returns {number}
 */
export const postsLength = (state) => {
    const { posts } = state.posts
    return posts.length
}

/**
 * gets api key for mce
 * @param state
 * @returns {string}
 */
export const mce_apikey = (state) => state.mce_api_key